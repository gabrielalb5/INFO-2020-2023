#include <stdio.h>
int main()
{
    
    int L, C;
	scanf("%d %d", &L, &C);

	if((L%2)==0 && (C%2)==0){
		printf("1");
	}else if((L%2)==1 && (C%2)==1){
		printf("1");
	}else{
	    printf("0");
	}
	return 0;
}
