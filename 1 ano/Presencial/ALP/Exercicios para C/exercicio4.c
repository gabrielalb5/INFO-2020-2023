#include <stdio.h>
int main()
{
	int c, f;
	printf ("Digite a temperatura em celsius:");
	scanf ("%d", &c);
	f= (9/5)*(c)+32;
	printf("A conversao e =%d\n", f);
	system ("PAUSE");
	return 0;
}
