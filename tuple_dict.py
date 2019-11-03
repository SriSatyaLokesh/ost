my_tuple = ('p','e','r','m','i','t')
print(my_tuple[0])
print(my_tuple[5])
n_tuple = ("mouse", [8, 4, 6], (1, 2, 3))
print(n_tuple[0][3])
print(n_tuple[1][1])
# create a dictionary
squares = {1:1, 2:4, 3:9, 4:16, 5:25}
print(squares.pop(4))
print(squares)
print(squares.popitem())
print(squares)
del squares[5]
print(squares)
squares.clear()
print(squares)
del squares
