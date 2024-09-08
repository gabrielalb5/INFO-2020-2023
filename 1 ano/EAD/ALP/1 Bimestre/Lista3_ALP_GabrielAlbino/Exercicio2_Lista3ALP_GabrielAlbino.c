#include <stdio.h>
int main(){
    
    float dist, veloc, tempo, veloc_metseg;
    
    printf("Digite a distancia em Km: ");
    scanf("%f",&dist);
    printf("Digite a velocidade (Km/h): ");
    scanf("%f",&veloc);
    
    tempo = dist/veloc;
    printf("O tempo medio e = %.2f\n", tempo);
    
    veloc_metseg = veloc/3.6;
    printf("A velocidade em m/s e = %.2f", veloc_metseg);
    
    return 0;
}
