faktoriyel =1

while True:
    sayi = int(input("Lütfen Negatif Olmayan Bir Sayı Giriniz:"))
    if (sayi <= 0):
        print("Negatif Sayı Girdiniz!\n")
    else:
        for i in range(1,sayi+1):
            faktoriyel *= i

        print("Sonuç=",faktoriyel)

        faktoriyel = 1
        
   
