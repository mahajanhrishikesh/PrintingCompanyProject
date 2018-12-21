from rectpack import newPacker
from PIL import Image, ImageDraw, ImageFont
import recs_list
import mysql.connector
import pdb

class BannerFitting(object):
    def __init__(self):
        self.bins = [(500,500)]

        
    def Check(self,l,b,card):
        '''
        Tells the programmer if fitting the banner in the specific master printer sheet is possible or not.
        
        
        
        INPUT: The lenght and width of the posters
        RETRUN: 0 if the fitting is not possible or 1 if the fitting is possible
        '''
        recs=[]
        recs_details = recs_list.Update_list(card)
        for idnt,l,b in recs_details:
            recs.append((l,b))
        #To check for valid size
        if l>=500 or b>=500:
            return 0
        #To check if the image will fit in the given grid
        else:
            test_packer = newPacker()
            
            recs_temp = [x for x in recs]
            recs_temp.append((l,b))
            
            test_bins = [(500, 500)]
            
            #Passing the rectangles to the packer
            for r in recs_temp:
                test_packer.add_rect(*r)

            # Passing the bins to the rectangles
            for b in test_bins:
                test_packer.add_bin(*b)

            test_packer.pack() #Packing the rectangles into the bins

            
            #Validity check logic
            if len(test_packer[0]) != len(recs_temp):
                return 0
            else:
                return 1
            
    def Submit(self,l,b,u_id,s_id,lam,job_card):
        t_val = self.Check(l,b,job_card)
        if t_val == 0:
            return 0
        elif t_val == 1:
            try:
                connection = mysql.connector.connect(host="localhost",user="root",passwd='',database="hello")
                cursor = connection.cursor()
                query = "INSERT INTO printing_request (user_id, store_id,lamination,length,width,jobcard_type,master_printer_job) VALUES (%s, %s, %s, %s, %s,%s,%s)" #Insert Querry
                val = (u_id,s_id,lam,l,b,job_card,1)       #Setting insert value
                cursor.execute(query,val)  #Executing the query
                connection.commit()         #Commiting the database to change
                recs_details = recs_list.Update_list(job_card)

                #Packing the rectangles
                recs = []
                for idnt,l,b in recs_details:
                    recs.append((l,b))
                fit_packer = newPacker()

    
    			# Add the rectangles to packing queue
                for r in recs:
                    fit_packer.add_rect(*r)
                  
    
    			# Add the bins where the rectangles will be placed
                for b in self.bins:
                    fit_packer.add_bin(*b)
    
    			# Start packing
                fit_packer.pack()
    			
    			#Making the display image
                background = Image.open("Solid_White_Futon_Cover.jpg")
                background=background.resize((500,500))
                blue = Image.open("new_img.jpg")
                count = 0
                for idnt,h,w in recs_details:
                    try:
                        rect = fit_packer[0][count]
                        temp = blue.resize((rect.width,rect.height))
                        draw = ImageDraw.Draw(temp)
                        msg = str(idnt)+"\n" + str(h) +'x' + str(w)
                        w, h = draw.textsize(msg)
                        font = ImageFont.truetype(size = 50)
                        draw.text(((rect.width-w)/2,(rect.height-h)/2), msg, fill="black", font = font)
                        background.paste(im = temp,box=(rect.x,rect.y))
                        count += 1
                    except IndexError:
                        break
                try:
                    name = "Master1/"+job_card+".jpg"
                    background.save(name,'JPEG')
                    return 1
                except FileNotFoundError:
                    return 3
                    recs.pop()
    
            except:
                return 3

        
        

	

	
	
    



