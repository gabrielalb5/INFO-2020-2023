#include<locale.h>
#include<stdio.h>
int main(){
	
	setlocale(LC_ALL,"Portuguese");
	int n_op, pecas_op, cont_pecas_m, cont_pecas_f;
	int n_op_maior_sal, i, tot_pecas, cont_f;
	float tot_folha, sal_op, sal_min;
	float media_pecas_f, maior_sal;
	char sexo_op;
	
	cont_pecas_m=0;
	cont_pecas_f=0;
	cont_f=0;
	tot_folha=0;
	tot_pecas=0;
	media_pecas_f=0;
	sal_min=1200;
	maior_sal=1200;
	
	for(i=0;i<15;i++){
		printf("Digite o numero do operario: ");
		scanf("%d",&n_op);
		printf("Digite o sexo <m/f>: ");
		scanf("%s",&sexo_op);
		printf("Digite o total de pecas produzidas: ");
		scanf("%d",&pecas_op);
		
		if(pecas_op <= 30){//classe 1
			sal_op = sal_min;
		}else if(pecas_op>30 && pecas_op <= 35){//classe 2
			sal_op = sal_min+(pecas_op-30)*(0.03*sal_min);
		}else{ //classe 3
			sal_op = sal_min+(pecas_op-30)*(0.05*sal_min);
		}
		printf("O operario de numero %d recebe R$%.2f\n\n", n_op, sal_op);
		
		if(sexo_op=='m'){
			cont_pecas_m=cont_pecas_m+pecas_op;
		}
		else if(sexo_op=='f'){
			cont_pecas_f=cont_pecas_f+pecas_op;
			cont_f++;
		}
		
		while(sal_op>maior_sal){
		    maior_sal = sal_op;
		    n_op_maior_sal = n_op;
		}
		tot_folha = tot_folha+sal_op;
		if(cont_f!=0){
	        media_pecas_f = cont_pecas_f/cont_f;
		}
	}
	
	printf("Total gasto com a folha de pagamento: R$%.2f\n", tot_folha);
	printf("O numero total de peças fabricadas pelos homens é de %d peças.\n", cont_pecas_m);
	printf("A média de peças fabricadas pelas mulheres é de %.2f peças.\n", media_pecas_f);
	printf("O/A operário(a) com o maior salário é o/a %d, com um salário de R$%.2f.", n_op_maior_sal, maior_sal);
	
	getch();
	return 0;
}
