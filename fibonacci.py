n=int(input("enter the number limit for fibonacci sequence : "))
a=0
b=1
if(n>=0):
	print("The fibonacci series is : ")
if(n>=0):
	print(a)
if(n>=1):
	print(b)
	c=a+b
	while c<=n :
		print(c)
		a=b
		b=c
		c=a+b
else:
	print("Atleast give limit 0 to get fibonacci series !")
