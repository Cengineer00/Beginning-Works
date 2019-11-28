x = int(input("kac sayinin ort. almak istiyon?"))
a=x
def toplam(x):
    
    if x==0:
        return 0
    else:
        y = int(input(str(a+1-x)+". sayi:"))
        return (y + toplam(x-1))

print(toplam(x)/x)
