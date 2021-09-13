v=[1,2,3,4]
# Ejercicio 1
def Intercambia (x,y):
    n = 0
    aux = x; n += 1
    x = y; n +=1
    y = aux; n += 1
    print ("La complejidad del ejercicio 1 es: ", n)
Intercambia (3,1)
# Ejericio 2
def maxi (x,y):
    n = 0
    if (x>=y):
        result = x
        n +=1
    else:
        result = y
        n +=1
    print ("La complejidad del ejercicio 2 es: ", n)
    return result
maxi (3,5)
# Ejercicio 3
def suma (v,tamaño):
    n = 0
    result = 0; n += 1
    for i in range (0,tamaño):
        result = result + v[i]
        n += 1
    print ("La complejidad del ejercicio 3 es: ", n)
    return result
suma (v,3)
# Ejercicio 4
def aSaber1 (v,tamaño):
    n = 0
    result = 0; n += 1
    i = 0; n += 1
    while (i < tamaño):
        result = result + v[i]; n += 1
        i += 1; n += 1
    print ("La complejidad del ejercicio 4 es: ", n)
    return result
aSaber1 (v,4)
# Ejercicio 5
def aSaber2 (v ,tamaño):
    n = 0
    result = 0; n += 1
    i = tamaño - 1; n += 1
    while (i >= 0):
        result = result + v[i]; n += 1
        i -= 1; n += 1
    print ("La complejidad del ejercicio 5 es: ", n)
    return result
aSaber2 (v,4)
# Ejercicio 6
def aSaber3 (v,tamaño):
    n = 0
    result = 0; n += 1
    i = tamaño - 1; n += 1
    while (i >= 0):
        result = result + v[i]
        i = i - 2; n += 1
    print ("La complejidad del ejercicio 6 es: ", n)
    return result
aSaber3 (v,4)