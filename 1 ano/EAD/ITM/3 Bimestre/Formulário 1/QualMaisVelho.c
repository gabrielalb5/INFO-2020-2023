#include <stdio.h>
#include <locale.h>
#include <conio.h>
int main(void){
    
    int idade1, idade2, idade3;
    char nome1 [30], nome2 [30], nome3 [30];
    setlocale(LC_ALL,"Portuguese");
    
    printf("Digite 3 nomes e suas respectivas idades.\n");
    printf("Nome 1: ");
    scanf("%s",&nome1);
    printf("Idade: ");
    scanf("%d",&idade1);
    
    printf("Nome 2: ");
    scanf("%s",&nome2);
    printf("Idade: ");
    scanf("%d",&idade2);
    
    printf("Nome 3: ");
    scanf("%s",&nome3);
    printf("Idade: ");
    scanf("%d",&idade3);
    
    if(idade1>0 && idade2>0 && idade3>0){
        if(idade1>idade2 && idade1>idade3){
            printf("\nO mais velho é %s (%d anos).", nome1, idade1);
        }else if(idade2>idade1 && idade2>idade3){
            printf("\nO mais velho é %s (%d anos).", nome2, idade2);
        }else if(idade3>idade1 && idade3>idade2){
            printf("\nO mais velho é %s (%d anos).", nome3, idade3);
        }else{
            printf("\nIdades iguais.");
        }
    }else{
        printf("\nIdade inválida.");
    }

    getch();
    return 0;
}
