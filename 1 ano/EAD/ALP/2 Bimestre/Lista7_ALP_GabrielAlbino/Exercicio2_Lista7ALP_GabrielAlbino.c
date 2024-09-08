#include <stdio.h>
int main(){
    
    int d, m, a;
    
    printf("Digite a data de hoje\n");
    printf("dia: ");
    scanf("%d", &d);
    printf("mês: ");
    scanf("%d", &m);
    printf("ano: ");
    scanf("%d", &a);
    
    if(d>0 && d<=31){
        if(m==1){
            printf("Dia %d de janeiro de %d.", d, a);
        }else if(m==2){
            printf("Dia %d de fevereiro de %d.", d, a);
        }else if(m==3){
            printf("Dia %d de março de %d.", d, a);
        }else if(m==4){
            printf("Dia %d de abril de %d.", d, a);
        }else if(m==5){
            printf("Dia %d de maio de %d.", d, a);
        }else if(m==6){
            printf("Dia %d de junho de %d.", d, a);
        }else if(m==7){
            printf("Dia %d de julho de %d.", d, a);
        }else if(m==8){
            printf("Dia %d de agosto de %d.", d, a);
        }else if(m==9){
            printf("Dia %d de setembro de %d.", d, a);
        }else if(m==10){
            printf("Dia %d de outubro de %d.", d, a);
        }else if(m==11){
            printf("Dia %d de novembro de %d.", d, a);
        }else if(m==12){
            printf("Dia %d de dezembro de %d.", d, a);
        }else
            printf("inválido");
    }else{
        printf("inválido");
	}	
    
    getch();
    return 0;
}
