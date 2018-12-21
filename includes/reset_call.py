import reset

x = reset.Reset()

#CHECK IF THE RESET WAS SUCCESSFUL
if x == 1:
    print("RESET SUCCESSFUL")
elif x == 3:
    print("UNEXPECTED ERROR")

