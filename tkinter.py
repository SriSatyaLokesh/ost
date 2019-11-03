from tkinter import *window=Tk()
window.title("Hi !")
window.geometry('350x200')
labeller=Label(window,text="",fg="red",bg="black")
labeller.grid(column=0,row=0)
txt=Entry(window,width=15)
txt.grid(column=2,row=1)

def clicked():
	res="Welcome to : "+txt.get()
	labeller.configure(text=res)

btn=Button(window,text="Click me",bg="black",fg="white",command=clicked)
btn.grid(column=2,row=0)
window.mainloop()
