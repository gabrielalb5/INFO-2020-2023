#include <stdio.h>
int main()
{
	int a,b,c;//caixa
	int h,l;//janela
	
	scanf("%d", &a);
	scanf("%d", &b);
	scanf("%d", &c);
	scanf("%d", &h);
	scanf("%d", &l);
	
	//a x b passam por h x l
	if(h>=a && l>=b){
		printf("S");	
	}else if(h>=b && l>=a){
		printf("S");
	//a x c passam por h x l
	}else if(h>=a && l>=c){
		printf("S");
	}else if(h>=c && l>=a){
		printf("S");
	//b x c passam por h x l
	}else if(h>=b && l>=c){
		printf("S");
	}else if(h>=c && l>=b){
		printf("S");
	}else{
		printf("N");
	}
	return 0;
}
