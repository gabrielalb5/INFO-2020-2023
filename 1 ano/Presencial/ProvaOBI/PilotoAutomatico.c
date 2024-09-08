#include<stdio.h>
int main(){
    
    int A, B, C;
    
    scanf("%d", &A);
    scanf("%d", &B);
    scanf("%d", &C);
    
    if((B-A)<(C-B)){
        printf("1");
    }else if((B-A)>(C-B)){
        printf("-1");
    }else if((B-A) == (C-B)){
        printf("0");
    }

    return 0;
}

