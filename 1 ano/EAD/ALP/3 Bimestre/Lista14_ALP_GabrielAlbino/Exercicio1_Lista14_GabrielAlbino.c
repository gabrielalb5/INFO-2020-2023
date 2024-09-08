#include <stdio.h>
int main(){
    
    int i, idade, cont;
    i=0;
    cont=0;
    
    while(i<10){
    printf("Digite a idade: ");
    scanf("%d",&idade);
        if(idade>30){
            cont++;
        }
        i++;
    }
    printf("Quantidade de pessoas acima de 30 anos: %d",cont);
    
    getch();
    return 0;
}
