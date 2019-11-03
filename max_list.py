arr=[]
n=int(input("enter array size : "))
print("enter elements : ")for i in range(0,n):
x=int(input())
arr.append(x)
def maxer(li):
	if len(li)==1:
		return li[0]
	else :
		m=maxer(li[1:])
		return m if m>li[0] else li[0]
print(maxer(arr))
