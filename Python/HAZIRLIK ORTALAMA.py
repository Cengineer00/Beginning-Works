"""
MT1: %25    3 TANE
PQ1: %10    3 IG, 9 PQ
AQ1: %5     5
SA1: %5     2

MT2: %35    3
PQ2: %10    7 PQ, 3 IG
AQ2: %5     5
SA2: %5     1
"""


while True:

    print("1. Dönem Notları: ")

    pq1= int(input("Pop Quiz 1:"))
    pq2= int(input("Pop Quiz 2:"))
    pq3= int(input("Pop Quiz 3:"))
    pq4= int(input("Pop Quiz 4:"))
    pq5= int(input("Pop Quiz 5:"))
    pq6= int(input("Pop Quiz 6:"))
    pq7= int(input("Pop Quiz 7:"))
    pq8= int(input("Pop Quiz 8:"))
    pq9= int(input("Pop Quiz 9:"))
    ig1= int(input("İnstructor's Grade 1:"))
    ig2= int(input("İnstructor's Grade 2:"))
    ig3= int(input("İnstructor's Grade 3:"))

    PQ1= ((pq1+pq2+pq3+pq4+pq5+pq6+pq7+pq8+pq9+ig1+ig2+ig3)/(12))/10

    aq1= int(input("Announced Quiz 1: "))
    aq2= int(input("Announced Quiz 2: "))
    aq3= int(input("Announced Quiz 3: "))
    aq4= int(input("Announced Quiz 4: "))
    aq5= int(input("Announced Quiz 5: "))

    AQ1= ((aq1+aq2+aq3+aq4+aq5)/5)/20

    sa1= int(input("Speaking Assessment 1: "))
    sa2= int(input("Speaking Assessment 2: "))

    SA1= ((sa1+sa2)/2)/20

    mt1=int(input("Mid Term 1: "))
    mt2=int(input("Mid Term 2: "))
    mt3=int(input("Mid Term 3: "))

    MT1= ((mt1+mt2+mt3)/3)/4

    

    y=MT1+SA1+AQ1+PQ1

    print("1. Dönem Ortalaması:", y*100/45)
    

    print("-------------------------------------")

    print("2. Dönem Notları:")

    mt01=int(input("Mid Term 1: "))
    mt02=int(input("Mid Term 2: "))
    mt03=int(input("Mid Term 3: "))

    MT2= ((mt01+mt02)/2)*35/100

    pq01= int(input("Pop Quiz 1:"))
    pq02= int(input("Pop Quiz 2:"))
    pq03= int(input("Pop Quiz 3:"))
    pq04= int(input("Pop Quiz 4:"))
    pq05= int(input("Pop Quiz 5:"))
    pq06= int(input("Pop Quiz 6:"))
    pq07= int(input("Pop Quiz 7:"))
    ıg01= int(input("İnstructors Grade 1:"))
    ıg02= int(input("İnstructors Grade 2:"))
    ıg03= int(input("İnstructors Grade 3:"))

    PQ2=(pq01+pq02+pq03+pq04+pq05+pq06+pq07+ıg01+ıg02+ıg03)/10/10



    aq01= int(input("Announced Quiz 1: "))
    aq02= int(input("Announced Quiz 2: "))
    aq03= int(input("Announced Quiz 3: "))
    aq04= int(input("Announced Quiz 4: "))
    aq05= int(input("Announced Quiz 5: "))


    AQ2= ((aq01+aq02+aq03+aq04+aq05)/5)/20

    sa01= int(input("Speaking Assessment 1: "))

    SA2= sa01/20

    print("-------------------------------------")

    x=AQ2+MT2+PQ2+SA2


    print("2. Dönem Ortalaması:", x*100/55)

    print("Genel Ortalama:", x+y)
