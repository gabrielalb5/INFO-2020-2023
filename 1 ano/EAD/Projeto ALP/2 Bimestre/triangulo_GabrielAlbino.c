/*Verificar se é triângulo e qual o tipo do triângulo*/

#include <stdio.h>
int main(){
	
	float x, y, z;
	
	printf("Digite o valor de x: ");
	scanf("%f",&x);
	printf("Digite o valor de y: ");
	scanf("%f",&y);
	printf("Digite o valor de z: ");
	scanf("%f",&z);
	
	if(((x+y)>z) && ((x+z)>y) && ((y+z)>x)){
		if((x==y) && (x==z)){
			printf("Triangulo equilatero!");
		}
		if(((x==y) && (x!=z)) || ((x==z) && (x!=y)) || ((y==z) && (y!=x))){
			printf("Triangulo isoceles!");
		}
		if((x!=y) && (x!=z) && (y!=z)){
		    printf("Triangulo escaleno!");
		}
	}
	getch();
	return 0;
}
