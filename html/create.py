import numpy
number = input("number of inputs")
inputs=numpy.chararray((2,int(number)))
print(inputs)
for x in range(int(number)):
    inputs[0][x] = input("Name for form:")
    inputs[1][x] = input("Name for javascript")
print(inputs)
