#Practice of Kebar
acumu = 0
acumu2 = 0
acumu3 = 0
acumu4 = 0
acumu5 = 0
for i in range (1, 8):
    product = float(input(f"Ingrese el precio del producto {i}"))
    
    if product >= 150000:
        discount = product * 0.30
        total1 = product - discount
        acumu2 = acumu2 + total1
        print("El precio del producto con el 30% es de :",total1)
    elif product >= 100000:
        discount = product * 0.20
        total2 = product - discount
        acumu3 = acumu3 + total2
        print("El precio del producto con el 20% es de :", total2)
    elif product >= 85000:
        discount = product * 0.10
        total3 = product - discount
        acumu4 = acumu4 + total3
        print("El precio del producto con el 10% es de :", total3)
    elif product > 50000:
        discount = product * 0.05
        total4 = product - discount
        acumu5 = acumu5 + total4
        print("El precio del producto con el 5% es de :", total4)
    else:
        print("El precio del producto no tendra descuento, es de :",product)
acumu = acumu + acumu2 + acumu3 + acumu4 + acumu5
print("El producto acumulado ganado fue de:", acumu)
