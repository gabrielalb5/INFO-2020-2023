#include<locale.h>
#include<stdio.h>
int main(){
	
	setlocale(LC_ALL,"Portuguese");
	int n, intv1=0, intv2=0, intv3=0, intv4=0;
	int total=0, val=0, p_val=0, p_intv1=0, p_intv2=0, p_intv3=0, p_intv4=0;
	
	while(n>=0){
		printf("Digite um número: ");
		scanf("%d",&n);
		
		if(n>=0 && n<=100){
		    val++;
		}
		
		if(n>=0 && n<=25){
			intv1++;
		}
		else if(n>=26 && n<=50){
			intv2++;
		}
		else if(n>=51 && n<=75){
			intv3++;
		}
		else if(n>=76 && n<=100){
			intv4++;
		}
		total++;
	}
	
	p_val= (val*100)/total;
	
	printf("\nForam digitados %d números, sendo %d (%d%% do total) válidos.\n", total, val, p_val);
	
	total= val;
	p_intv1= (intv1*100)/total;
	p_intv2= (intv2*100)/total;
	p_intv3= (intv3*100)/total;
	p_intv4= (intv4*100)/total;
	
	printf("Quantidade de números válidos\ne suas porcentagens em cada intervalo:\n");
	printf("[0-25] = %d (%d%%)\n", intv1, p_intv1);
	printf("[26-50] = %d (%d%%)\n", intv2, p_intv2);
	printf("[51-75] = %d (%d%%)\n", intv3, p_intv3);
	printf("[76-100] = %d (%d%%)\n", intv4, p_intv4);
	
	return 0;
}
