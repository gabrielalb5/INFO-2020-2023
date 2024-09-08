#include <stdio.h>
int main(){
    
    int ano_nasc, ano_atual, idade_hoje, idade_2055;
    
    printf("Digite o ano de nascimento: ");
    scanf("%d", &ano_nasc);
    printf("Digite o ano atual: ");
    scanf("%d", &ano_atual);
    
    idade_hoje = ano_atual-ano_nasc;
    idade_2055 = 2055-ano_nasc;
    
    printf("A idade atual é de: %d anos\n", idade_hoje);
    printf("A idade em 2055 sera de: %d anos", idade_2055);

    return 0;
}
