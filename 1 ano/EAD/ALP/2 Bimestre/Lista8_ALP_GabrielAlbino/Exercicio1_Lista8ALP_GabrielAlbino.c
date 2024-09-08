#include <stdio.h>
#include <math.h>
int main(){
    
    int num_escolhido; 
	float n1, n2, r;
    
    printf("Menu\n");
    printf("1) Soma de dois numeros\n");
    printf("2) Raiz quadrada de um numero\n");
    printf("3) Quadrado de um numero\n");
    scanf("%d", &num_escolhido);
    
    if(num_escolhido==1){
        printf("Opcao 1 escolhida\n");
        printf("Digite dois numeros: ");
        scanf("%f", &n1);
        scanf("%f", &n2);
        
        r = n1+n2;
        
        printf("Resultado: %.2f", r);
    }
    else if(num_escolhido==2){
        printf("Opcao 2 escolhida\n");
        printf("Digite um numero: ");
        scanf("%f", &n1);
        
        r = sqrt(n1);
        
        printf("Resultado: %.2f", r);
    }
    else if(num_escolhido==3){
        printf("Opcao 3 escolhida\n");
        printf("Digite um numero: ");
        scanf("%f", &n1);
        
        r = pow(n1,2);
        
        printf("Resultado: %.2f", r);
    }
    else
        printf("Opcao invalida");
    
    getch();
    return 0;
}
