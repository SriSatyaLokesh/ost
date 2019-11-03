def summer(n):
	if n==0:
		return 0
	else :
		return n+summer(n-1)
n=int(input("Enter the range : "))
print("sum of natural numbers is :",summer(n))
