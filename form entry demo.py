import tkinter as tk

def show_entry_fields():
	print("UPC: %s\nname %s" %(e1.get(), e2.get()))

master = tk.Tk()
tk.Label(master, text ="UPC").grid(row=0)
tk.Label(master, text ="name").grid(row=1)
tk.Label(master, text ="category").grid(row=2)
tk.Label(master, text = "brand").grid(row=3)

e1 = tk.Entry(master)
e2 = tk.Entry(master)
e3 = tk.Entry(master)
e4 = tk.Entry(master)

e1.grid(row=0, column = 1)
e2.grid(row=1, column = 1)
e3.grid(row=2, column = 1)
e4.grid(row=3, column = 1)

tk.Button(master, text="Show", command = show_entry_fields).grid(row=3, column=1, sticky="W", pady=5)
master.mainloop()
