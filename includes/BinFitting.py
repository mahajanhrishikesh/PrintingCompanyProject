from rectpack import newPacker
from PIL import Image, ImageDraw, ImageFont
import recs_list
import mysql.connector
import cost_cal
import pdb


class BinFitting(object):
    def __init__(self):
        self.bins = []

    def Check(self, l, b, card, gsm, num):
        '''
		Tells the programmer if fitting the banner in the specific master printer sheet is possible or not.



		INPUT: The lenght and width of the posters
		RETRUN: 0 if the fitting is not possible or 1 if the fitting is possible
		'''
        recs = []
        recs_details = recs_list.Update_list(card, gsm)
        for idnt, ln, be in recs_details:
            recs.append((ln, be))
        for x in range(num):
            recs.append((l, b))
        # To check for valid size
        if l >= 500 or b >= 500:
            return 0
        # To check if the image will fit in the given grid
        else:
            test_packer = newPacker()

        test_bins = recs_list.Update_bin(card, gsm)

        # Passing the bins to the rectangles
        for b in test_bins:
            test_packer.add_bin(*b)

        # Passing the rectangles to the packer
        for r in recs:
            test_packer.add_rect(*r)

        test_packer.pack()  # Packing the rectangles into the bins
        # Validity check logic
        count = 0
        for x in range(len(test_packer)):
            count += len(test_packer[x])
        if count != len(recs):
            return 0
        else:
            return 1

    def Submit(self, l, b, gsm, num, u_id, s_id, lam, job_card):
        t_val = self.Check(l, b, job_card, gsm, num)
        if t_val == 0:
            return 0
        elif t_val == 1:
            try:
                quo = cost_cal.cost(l,b,num,job_card,gsm=gsm,lam=lam)
                connection = mysql.connector.connect(host="localhost", user="root", passwd='',database="loginsystem")
                cursor = connection.cursor()
                query = "INSERT INTO printing_request (user_id, store_id,lamination,length,width,jobcard_type,master_printer_job,gsm,num_of_copies,order_cost) VALUES (%s, %s, %s, %s, %s,%s,%s,%s,%s,%s)"  # Insert Querry
                val = (u_id, s_id, lam, l, b, job_card, 1, gsm, num,quo)  # Setting insert value
                cursor.execute(query, val)  # Executing the query
                connection.commit()  # Committing the database to change
                recs_details = recs_list.Update_list(job_card, gsm)

                # Packing the rectangles
                recs = []
                for idnt, l, b in recs_details:
                    recs.append((l, b))
                fit_packer = newPacker()


                # Add the rectangles to packing queue
                for r in recs:
                    fit_packer.add_rect(*r)
                # initializing self.bin attribute
                new_bins = recs_list.Update_bin(job_card, gsm)
                # Add the bins where the rectangles will be placed
                for b in new_bins:
                    fit_packer.add_bin(*b)
                # Start packing
                fit_packer.pack()
                success = 1
                for x in range(len(new_bins)):
                    # Making the display image
                    background = Image.open("Solid_White_Futon_Cover.jpg")
                    background = background.resize((int(new_bins[x][0]) * 10, int(new_bins[x][1]) * 10))
                    blue = Image.open("new_img.jpg")
                    count = 0
                    # Adding the images of covered rectagles from the packer list
                    try:
                        for lp in range(len(fit_packer[x])):
                            rect = fit_packer[x][count]
                            wid = rect.width
                            hei = rect.height
                            idnt = -1
                            ind = -1
                            for ord in recs_details:
                                if ord[1] == hei and ord[2] == wid or ord[2] == hei and ord[1] == wid:
                                    idnt = ord[0]
                                    ind = recs_details.index(ord)
                                    break
                            temp = blue.resize((int(rect.width) * 10, int(rect.height) * 10))
                            draw = ImageDraw.Draw(temp)
                            msg = "     "+str(idnt) + "\n" + str(hei) + 'x' + str(wid)
                            w, h = draw.textsize(msg)
                            draw.text((((int(rect.width) * 10 - w)) / 2, ((int(rect.height) * 10 - h)) / 2), msg, fill="black")
                            background.paste(im=temp, box=(int(rect.x) * 10, int(rect.y) * 10))
                            recs_details.pop(ind)
                            count += 1
                    except:
                        break


                    try:
                        name = "Master/" + job_card + "_" + str(gsm) + "_(" + str(new_bins[x][0]) + "x" + str(
                            new_bins[x][1]) + ")" + "/" + job_card + str(x + 1) + ".jpg"
                        background.save(name, 'JPEG')
                    except FileNotFoundError:
                        success = 4
                        recs.pop()
                return success
            except:
                return 3
