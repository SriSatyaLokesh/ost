def menu():
	print("Welcome to my Calculus World ! ")
	print("What operation do you want to do ? ")
	print("1. Addition")
	print("2. Subtraction")
	print("3. Multiplication")	
	print("4. Normal Division")
	print("5. Floor Division")
	print("6. Modulus")
	print("7. power")

ch='y'
while ch=='y' or ch=='Y' :
		menu()
	x=int(input())
	a=int(input("Enter num1 : "))
	b=int(input("Enter num2 : "))
	if x==1:

		print("Addition value is :",a+b)
	elif x==2:

		print("Subtraction value is :",a-b)
	elif x==3:

		print("Multiplication value is :",a*b)
	elif x==4:

		print("Normal Division value is :",a/b)
	elif x==5:
	
		print("Floor Division value is :",a//b)
	elif x==6:

		print("Modulus value is :",a%b)
	elif x==7:

		print("power value is :",a**b)
	else :
		print("sorry wrong choice ! ")
	print("Do you want to continue being here ? (y/Y)")
	ch=input()
