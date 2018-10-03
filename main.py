import tkinter as tk

def addItem():
	top = tk.Toplevel()
	top.geometry("300x250")
	tk.Label(top, text ="UPC").grid(row=0)
	tk.Label(top, text ="name").grid(row=1)
	tk.Label(top, text ="category").grid(row=2)
	tk.Label(top, text = "brand").grid(row=3)
	e1 = tk.Entry(top)
	e2 = tk.Entry(top)
	e3 = tk.Entry(top)
	e4 = tk.Entry(top)
	e1.grid(row=0, column = 1)
	e2.grid(row=1, column = 1)
	e3.grid(row=2, column = 1)
	e4.grid(row=3, column = 1)
	tk.Button(top, text="Submit", command = notImplemented).grid(row=5)

	print("UPC: %s\nname %s" %(e1.get(), e2.get()))
def notImplemented():
	print("This feature is not yet implemented")

def showListbox(window):
	END = 0
	listbox = tk.Listbox(window, width = 80, height = 40)
	listbox.pack()
	listbox.insert(END, "these are item entries")
	for item in ["one", "two", "three", "four"]:
		listbox.insert(END, item)
		END+=1	
root = tk.Tk()
root.geometry("800x600")
root.title("Iota Inventory Application")
tk.Button(root, text="Add Item", command = addItem).place(x=10, y=10)
tk.Button(root, text="Quit", command =quit).place(x=750, y=10)
showListbox(root)

root.mainloop()
