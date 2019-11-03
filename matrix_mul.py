x=[[1,2,3],[4,5,6],[7,8,9],[10,11,12]]
# 3x4 matrix
y=[[1,2,3,4],[5,6,7,8],[9,10,11,12]]
# 4x4 matrix
res=[[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0]]
for i in range(len(x)):
	for j in range(len(y[0])):
		for k in range(len(y)):
			res[i][j]=x[i][k]*y[k][j]
print(res)
