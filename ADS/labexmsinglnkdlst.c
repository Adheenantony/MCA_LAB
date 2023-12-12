#include<stdio.h>
#include<stdlib.h>
struct node{
 int info;
 struct node *link;
};
struct node *start=NULL;
void traverse()
{
 struct node *temp;
 if(start==NULL)
  printf("The list is empty\n");
 else{
 temp=start;
 while(temp!=NULL)
 {
 printf("%d-->",temp->info);
 temp=temp->link;
 }
 }
 }
 void insertAtFront()
 {
 int data;
 struct node *temp;
 temp=malloc(sizeof(struct node));
 printf("enter the element to be inserted:");
 scanf("%d",&data);
 temp->info=data;
 temp->link=start;
 start=temp;
 }
 void insertAtEnd()
 {
 int data;
 struct node *head,*temp;
 temp=malloc(sizeof(struct node));
 head=start;
 printf("enter the element to be inserted:");
 scanf("%d",&data);
 temp->link=0;
 temp->info=data;
 while(head->link!=NULL)
 {
 head=head->link;
 }
 head->link=temp;
 }
 void insertAtPosition()
 {
 struct node *temp,*newnode;
 int pos,data,i=1;
 newnode=malloc(sizeof(struct node));
 printf("enter the position and data:");
 scanf("%d%d",&pos,&data);
 start=temp;
 while(i<pos-1)
 {
  temp=temp->link;
  i++;
 }
 newnode->info=data;
 newnode->link=temp->link;
 temp=temp->link;
 }
 void deleteAtFront()
 {
  struct node *temp;
  if(start==NULL)
   printf("The list is empty");
  else
  {
   temp=start;
   start=start->link;
   free(temp);
  }
 }
 void search()
 {
 struct node *tr=start;
 int found=-1,key;
 printf("Enter the element to search:");
 scanf("%d",&key);
 while(tr!=NULL)
 {
  if(tr->info==key)
  {
   found=1;
   break;
  }
  tr=tr->link;
  }
  if(found==1)
  printf("Element %d is present\n",key);
  else
  printf("Element not found\n");
 }
  
 void main()
 {
  int ch;
  while(1){
  printf("\n1.Traverse\n2.Insert at beginnig\n3.Insert at end\n4.Insert at position\n5.Delete at beginning\n6.Search\n");
  printf("Enter your choice\n:");
  scanf("%d",&ch);
  switch(ch)
  {
   case 1:
    traverse();
    break;
   case 2:
    insertAtFront();
    break;
   case 3:
    insertAtEnd();
    break;
   case 4:
    insertAtPosition();
    break;
   case 5:
    deleteAtFront();
    break;
   case 6:
    search();
    break;
   default:printf("Invalid choice");
 }
}
}
   
   
   
   
 
  
  
  
 
 
 
 
   
  
  
  
  
  
  
  
  
  
  
   
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
