#include <stdio.h>
int main(){
    
    float dinheiro, parcela, mes1, mes2, mes3, total, pagou_a_mais;

    printf("Digite o valor do emprestimo: R$");
    scanf("%f",&dinheiro);
    
    parcela = dinheiro/3;
    mes1 = parcela+(parcela*1)/100;
    mes2 = mes1+(mes1*1)/100;
    mes3 = mes2+(mes2*1)/100;
    
    total = mes1+mes2+mes3;
    pagou_a_mais = (mes1+mes2+mes3)-(dinheiro);
    
    printf("Maria pagou R$%.2f no ultimo mes\n", mes3);
    printf("O total pago foi de R$%.2f\n", total);
    printf("Ela pagou R$%.2f a mais.", pagou_a_mais);
    
    return 0;
}
