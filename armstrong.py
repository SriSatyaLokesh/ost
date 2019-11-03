def armer(num):
	x=str(num)
	n=len(x)
	temp=num
	sum1=0
	while num>0 :
		powe=(num%10)**n
		sum1+=powe
		num=num//10
	if sum1==temp :
		return sum1
	else :
		return 0

i1=int(input("Enter first inclusive range : "))
i2=int(input("Enter second inclusive range : "))
print("The following are the list of armstrong numbers : ")
for i in range(i1,i2+1):
	check=armer(i)
	if check>0 :
		print(check)
