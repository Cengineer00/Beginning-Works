#Vücut Kütle İndeksi Hesaplama

print("0-18.4: Zayıf")
print("18.4-24.9: Normal")
print("24.9-29.9: Fazla Kilolu")
print("29.9-34.9: Şişman (Obez) I. Sınıf")
print("34.9-44.9: Şişman (Obez) II. Sınıf")
print("44.9 ve üstü: Şişman (Aşırı Obez) III. Sınıf")
print("--------------------------------------------")


while True:

    kilo=float(input("Kilonuzu giriniz (kg) :"))
    boy=float(input("Boyunuzu giriniz (m) :"))

    sonuç= kilo/boy**2

    print("Vücut kitle indeksiniz:", sonuç)

    if sonuç<=0:
        print("Bilgilerinizi kontrol ediniz.")

    elif sonuç<=18.4:
        print("İdeal kilonuzun altındasınız. Boyunuza göre uygun ağırlıkta olmadığınızı,\nzayıf olduğunuzu gösterir. Zayıflık, bazı hastalıklar için risk oluşturan\nve istenmeyen bir durumdur. Boyunuza uygun ağırlığa erişmeniz için\nyeterli ve dengeli beslenmeli, beslenme alışkanlıklarınızı geliştirmeye\nözen göstermelisiniz.")
        print("İdeal Kilonuz:",round(21.3*boy**2))

        print("Kaynakça: https://vucut-kitle-endeksi.hesaplama.net")

    elif sonuç <= 24.9:
                
        print("Kilonuz normal. Boyunuza göre uygun ağırlıkta olduğunuzu gösterir.\nYeterli ve dengeli beslenerek ve düzenli fiziksel aktivite yaparak\nbu ağırlığınızı korumaya özen gösteriniz.")
        print("İdeal Kilonuz:",round(21.3*boy**2))

        print("Kaynakça: https://vucut-kitle-endeksi.hesaplama.net")

    elif sonuç <= 29.9:
        print("İdeal kilonuzun üstündesiniz. Boyunuza göre vücut ağırlığınızın fazla olduğunu\ngösterir. Fazla kilolu olma durumu gerekli önlemler alınmadığı takdirde pek çok hastalık için risk faktörü olan obeziteye (şişmanlık) yol açar.")
        print("İdeal Kilonuz:",round(21.3*boy**2))

        print("Kaynakça: https://vucut-kitle-endeksi.hesaplama.net")

    elif sonuç <= 34.9:
        print("Şişman (Obez) - I. Sınıf:\nBoyunuza göre vücut ağırlığınızın fazla olduğunu bir başka deyişle şişman olduğunuzun bir göstergesidir. Şişmanlık, kalp-damar hastalıkları, diyabet, hipertansiyon v.b. kronik hastalıklar için risk faktörüdür. Bir sağlık kuruluşuna başvurarak hekim / diyetisyen kontrolünde zayıflayarak normal ağırlığa inmeniz sağlığınız açısından çok önemlidir. Lütfen, sağlık kuruluşuna başvurunuz.")
        print("İdeal Kilonuz:",round(21.3*boy**2))

        print("Kaynakça: https://vucut-kitle-endeksi.hesaplama.net")

    elif sonuç <= 44.9:
        print("Şişman (Obez) - II. Sınıf:\nBoyunuza göre vücut ağırlığınızın fazla olduğunu bir başka deyişle şişman olduğunuzun bir göstergesidir. Şişmanlık, kalp-damar hastalıkları, diyabet, hipertansiyon v.b. kronik hastalıklar için risk faktörüdür. Bir sağlık kuruluşuna başvurarak hekim / diyetisyen kontrolünde zayıflayarak normal ağırlığa inmeniz sağlığınız açısından çok önemlidir. Lütfen, sağlık kuruluşuna başvurunuz.")
        print("İdeal Kilonuz:",round(21.3*boy**2))

        print("Kaynakça: https://vucut-kitle-endeksi.hesaplama.net")    

    elif sonuç > 44.9:
        print("Aşırı Şişman (Aşırı Obez) - III. Sınıf: \nBoyunuza göre vücut ağırlığınızın fazla olduğunu bir başka deyişle şişman olduğunuzun bir göstergesidir. Şişmanlık, kalp-damar hastalıkları, diyabet, hipertansiyon v.b. kronik hastalıklar için risk faktörüdür. Bir sağlık kuruluşuna başvurarak hekim / diyetisyen kontrolünde zayıflayarak normal ağırlığa inmeniz sağlığınız açısından çok önemlidir. Lütfen, sağlık kuruluşuna başvurunuz.")
        print("İdeal Kilonuz:",round(21.3*boy**2))

        print("Kaynakça: https://vucut-kitle-endeksi.hesaplama.net")
