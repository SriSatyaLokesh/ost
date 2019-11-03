def pow(a):
	return lambda x:a**x
twopower=pow(2)
n=int(input("Enter the number of terms in the series : "))
print("The 2 power series is : ")
for i in range(0,n):
	print(twopower(i)," ")
