#!/usr/bin/python3
def p(a):
	print(a,end="")
h=10
b=2*int(h/2)+3
for j in range(0,int(b/2)):
	p(" ")
print("*")
for i in range(0,h):
	ä=2*int(i/2)+3
	for j in range(0,int((b-ä)/2)):
		p(" ")
	p("/")
	for j in range(0,ä-2):
		p(","if(j+i)%2 else ".")
	print("\\")
def x():
	for j in range(0,int((b-3)/2)):
		p("^")
x()
p("[")
p("_")
p("]")
x()
