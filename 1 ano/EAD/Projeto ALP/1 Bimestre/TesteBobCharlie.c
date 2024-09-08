#include<stdio.h>
int main(){
    
    float charlie, bob;
    int anosultra;
    
    charlie = 1.5;
    bob = 1.1;
    anosultra = 1;

    do
    {
    charlie = charlie+ 0.021;
    bob = bob+ 0.025;
    anosultra = anosultra + 1;
    }while (charlie>bob);
    
    if(anosultra>15){
    printf("Nao e possivel que bob ultrapasse a altura de Charlie ate os 20 anos\n");
    }
    printf("Seriam necessarios mais %d anos para Bob ultrapassar a altura de Charlie\n", anosultra);
    
    charlie = 1.5 + (13*0.021);
    bob = 1.1 + (15*0.025);

    printf("Aos 20 anos Bob tera %.2fm\n", bob);
    printf("e Charlie tera %.2fm", charlie);
    
    
    return 0;
}
