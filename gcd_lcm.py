def gcd(x,y):
	while x!=y:
		if x>y:
			x=x-y
		else :
			y=y-x
	return x
def lcm(x,y):
	g=gcd(x,y)
	l=x*y
	l=l//g
	return l
x=int(input("enter num1 : "))
y=int(input("enter num2 : "))
print("LCM : ",lcm(x,y))
print("GCD : ",gcd(x,y))
