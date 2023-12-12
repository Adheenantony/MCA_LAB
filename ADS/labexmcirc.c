#include<stdio.h>
#include<stdlib.h>
int a[10],front=-1,rear=-1,n;
void insert();
void display();
void del();
void main()
{
 int ch;
 printf("Enter the size:");
 scanf("%d",&n);
 while(1)
 {
 printf("\n1.Insert\n2.Display\n3.Delete\n");
 printf("Enter your choice:");
 scanf("%d",&ch);
 switch(ch)
 {
  case 1:
    insert();
    break;
  case 2:
    display();
    break;
  case 3:
    del();
    break;
  default:printf("Invalid choice");
  }
 }
}
void insert()
{
int x;
if((front==0 && rear==n-1) || (front==rear+1))
{
  printf("Queue is full");
}
else{
   printf("Enter the element to insert:");
   scanf("%d",&x);
   if(front==-1 && rear==-1)
     front=rear=0;
   else if(rear==n-1 && front!=0)
  
     rear=0;
  
   else
     rear=(rear+1)%n;
     a[rear]=x;
}
}
void display()
{
int i;

if(front==-1)

 printf("Queue is empty");

else{
printf("front=%d\nrear=%d\n",front,rear);
if(front<=rear)
{
  for(i=front;i<=rear;i++)
     printf("%d",a[i]);
}
else{

   for(i=front;i<n;i++)
      printf("%d",a[i]);
   for(i=0;i<rear;i++)
      printf("%d",a[i]);
   }
}
}
void del()
{
if(front==-1)
{
 printf("Queue is empty");
}
else{
   printf("element to be deleted:%d",a[front]);
   if(front==rear)
     front=rear=-1;
   else{
     if(front==n-1)
       front=0;
     else
       front+=1;
     }
    }
 }
   
    
    
    
    
    
