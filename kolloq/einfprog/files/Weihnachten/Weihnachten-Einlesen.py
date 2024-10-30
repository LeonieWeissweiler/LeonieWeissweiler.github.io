#!/usr/bin/python3
# Weihnachtsaufgabe
# Autorin: Leonie Weißweiler

def breite_am_index(i):
	return 2*int(i / 2) + 3
	
hoehe = int(input("Wie hoch soll der Baum sein?\n"))
breite = breite_am_index(hoehe)

for j in range(0,int(breite/2)):
	print(" ", end="")
print("*")

for i in range(0,hoehe):
	äußere_breite = breite_am_index(i)
	
	for j in range(0, int((breite - äußere_breite) / 2)):
		print(" ", end="")
		
	print("/", end="")
		
	for j in range(0, äußere_breite - 2):
		if (j + i) % 2:
			print(",", end="")
		else:
			print(".", end="")
	print("\\")
	
for j in range(0, int((breite - 3) / 2)):
	print("^", end="")
	
print("[", end="")
print("_", end="")
print("]", end="")

for j in range(0, int((breite - 3) / 2)):
	print("^", end="")
	
print()
	
