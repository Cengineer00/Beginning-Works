#Klanlar Attack Planner

"""
salise 1
saniye 1000
dakika 60000
saat 3600000
"""

while True:

    q=int(input("Saldırmak istediğiniz köyün koordinatlarını giriniz:\nx="))
    w=int(input("y="))

    e=int(input("Birlikleri göndereceğiniz köyün koordinatlarını giriniz:\nx="))
    r=int(input("y="))

    t=int(input("En yavaş birliğin bir birimi kaç dakikada geçtiğini (dk/br) yazınız:"))

    isa=int(input("Saldırınızın saat kaçta girmesini istediğinizi yazınız:\nSaat:"))
    idk=int(input("Dakika:"))
    isn=int(input("Saniye:"))

    from math import sqrt

    tsalise=(float((sqrt((abs((q-e)**2)+abs((w-r)**2)))*t)))*60000


    saat=int(tsalise//3600000)

    dakika=int ((tsalise-(3600000*(tsalise//3600000)))//60000)

    saniye= int((tsalise-(60000*(tsalise//60000)))//1000)

    salise= int(tsalise-(1000*(tsalise//1000)))


    ssa=int(isa-saat)
    sdk=int(idk-dakika)
    ssn=int(isn-saniye)


    if salise <500:
        
        print("Birlikleriniz şu kadar sürede varacaktır:",saat,"saat",dakika,"dakika",saniye,"saniye")
        

        if ssa>0 and sdk>0 and ssn>0:

            print("Saldırınızı şu saatte atmalısınız:",ssa,".",sdk,".",ssn)

        if ssa>0 and sdk>0 and ssn<0:

            print("Saldırınızı şu saatte atmalısınız:",ssa,".",sdk-1,".",ssn+60)

        if ssa>0 and sdk<0 and ssn>0:

            print("Saldırınızı şu saatte atmalısınız:",ssa-1,".",sdk+60,".",ssn)

        if ssa>0 and sdk<0 and ssn<0:

            print("Saldırınızı şu saatte atmalısınız:",ssa-1,".",sdk+59,".",ssn+60)

        if ssa<0 and sdk>0 and ssn>0:

            print("Saldırınızı şu saatte atmalısınız:",ssa+24,".",sdk,".",ssn)

        if ssa<0 and sdk>0 and ssn<0:

            print("Saldırınızı şu saatte atmalısınız:",ssa+24,".",sdk-1,".",ssn+60)

        if ssa<0 and sdk<0 and ssn>0:

            print("Saldırınızı şu saatte atmalısınız:",ssa+23,".",sdk+60,".",ssn)

        if ssa<0 and sdk<0 and ssn<0:

            print("Saldırınızı şu saatte atmalısınız:",ssa+23,".",sdk+59,".",ssn+60)



    elif salise >=500:

        ssn=int(isn-(saniye+1))

        print("Birlikleriniz şu kadar sürede varacaktır:",saat,"saat",dakika,"dakika",saniye+1,"saniye")

        if ssa>0 and sdk>0 and ssn>0:

            print("Saldırınızı şu saatte atmalısınız:",ssa,".",sdk,".",ssn)

        if ssa>0 and sdk>0 and ssn<0:

            print("Saldırınızı şu saatte atmalısınız:",ssa,".",sdk-1,".",ssn+60)

        if ssa>0 and sdk<0 and ssn>0:

            print("Saldırınızı şu saatte atmalısınız:",ssa-1,".",sdk+60,".",ssn)

        if ssa>0 and sdk<0 and ssn<0:

            print("Saldırınızı şu saatte atmalısınız:",ssa-1,".",sdk+59,".",ssn+60)

        if ssa<0 and sdk>0 and ssn>0:

            print("Saldırınızı şu saatte atmalısınız:",ssa+24,".",sdk,".",ssn)

        if ssa<0 and sdk>0 and ssn<0:

            print("Saldırınızı şu saatte atmalısınız:",ssa+24,".",sdk-1,".",ssn+60)

        if ssa<0 and sdk<0 and ssn>0:

            print("Saldırınızı şu saatte atmalısınız:",ssa+23,".",sdk+60,".",ssn)

        if ssa<0 and sdk<0 and ssn<0:

            print("Saldırınızı şu saatte atmalısınız:",ssa+23,".",sdk+59,".",ssn+60)

        else:
            print("Tekrar deneyiniz.")
            
    









    
