#Hesap Makinesi
"""
toplama t
çıkarma ç
çarpma x
bölme b
bölümden kalan sayıyı hesaplamak için k
çıkmak f
kök q
"""



print("Toplama işlemi yapmak için 't',\n------------------------------\nÇıkarma işlemi yapmak için 'ç',\n------------------------------\nÇarpma işlemi yapmak için 'x',\n------------------------------\nBölme işlemi yapmak için 'b',\n------------------------------\nBölümden kalan sayıyı hesaplamak için 'k',\n------------------------------\nİşlemi sonlandırmak için 'f' harfini giriniz")
print("------------------------------")


while True:
    q=input("Yapmak istediğiniz işlemi giriniz:")
    if q=="t":
        t1=input("1. sayıyı giriniz:")
        t2=input("2. sayıyı giriniz:")

        print("Hesaplanıyor...")
        print("Sonucunuz:", str(t1),"+",str(t2),"=",(float(t1)+float(t2)))
       
            
    elif q=="ç":
        ç1=input("Eksilen sayıyı giriniz:")
        ç2=input("Çıkan sayıyı giriniz:")
        print("Hesaplanıyor...")

        print("Sonucunuz:", str(ç1),"-",str(ç2),"=",(float(ç1)-float(ç2)))

    elif q=="x":
        x1=input("1. sayıyı giriniz:")
        x2=input("2. sayıyı giriniz:")
        print("Hesaplanıyor...")

        print("Sonucunuz:", str(x1),"x",str(x2),"=",(float(x1)*float(x2)))

    elif q=="b":
        b1=input("Bölünen sayıyı giriniz:")
        b2=input("Bölen sayıyı giriniz:")
        print("Hesaplanıyor...")

        print("Sonucunuz:", str(b1),"/",str(b2),"=",(float(b1)/float(b2)))

    elif q=="k":
        k1=input("Bölünen sayıyı giriniz:")
        k2=input("Bölen sayıyı giriniz:")
        print("Hesaplanıyor...")

        print("Sonucunuz:", str(k1),"%",str(k2),"=",int(float(k1)%float(k2)))
    
    elif q=="q":
        q1=input("Kökünü almak istediğiniz sayıyı giriniz:")
        q2=input("Kaçıncı dereceden kök almak istediğinizi giriniz:")
        print("Hesaplanıyor...")

        print("Sonucunuz:","=",(float(q1)%float(q2)))
        

    elif q=="f":
        break

    else:
        print("Yeniden Tuşlayınız.")
        
        
    



