class Error(Exception):
	pass
class valueTooSmallException(Error):
	pass
class valueTooBigException(Error):
	pass
num=10
while True:
	try:
		x=int(input("Enter number : "))
		if x<num:
			raise valueTooSmallException
		elif x>num:
			raise valueTooBigException
		else :
			print("Congratulations ! you've guessed correctly !!")
			break
	except valueTooSmallException:
		print("You're guessing way too low !")
	except valueTooBigException:
		print("You're guessing way too high !")

