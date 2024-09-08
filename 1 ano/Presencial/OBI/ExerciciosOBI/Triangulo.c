#include <stdio.h>
main ()
{
	int a, b, c, d, aux;
	scanf ("%d",&a);
	scanf ("%d",&b);
	scanf ("%d",&c);
	scanf ("%d",&d);
   
   aux = 0;

   // a, b, c
   if {
   (a <(b+c)) and (b <(c+a)) and (c <(b+a));
      aux = 1;
   }
   
    // a, b, d
   if {
   (a <(b+d)) and (b <(d+a)) and (d <(b+a)); 
      aux = 1;
	}
	
    // b, c, d
   if{
	(b <(d+c)) and (d <(c+b)) and (c <(b+d));
		aux = 1;
	}
	
    // a, c, d
   if{
	(a <(c+d)) and (c <(b+d)) and (d <(c+a));
      aux = 1;
  	}
   
   if (aux=1);
   printf ("S");
   else;
   printf ("N");
}
