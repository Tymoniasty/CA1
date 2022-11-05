# bp
Blood Pressure Calculator
ASP.Net Core
T U   D u b l i n ,   T a l l a g h t   C a m p u s 
 D e p a r t m e n t   o f   C o m p u t i n g 
 M . S c .   i n   D e v - O p s 
 2 0 2 2 / 2 0 2 3 
 C o n t i n u o u s   S o f t w a r e   D e p l o y m e n t 
 C A 2   P r o j e c t 
 D u e :   1 2 / 1 2 / 2 0 2 2 
 V a l u e :   6 5 % 
 L e c t u r e r :   G a r y   C l y n c h 
 C I / C D   P i p e l i n e   f o r   B l o o d   P r e s s u r e   C a t e g o r y   C a l c u l a t o r 
 B l o o d   p r e s s u r e   i s   m e a s u r e d   a s    s y s t o l i c   p r e s s u r e    o v e r    d i a s t o l i c   p r e s s u r e  ,   t h e   u n i t   o f 
 m e a s u r e   b e i n g   m m H G .   F o r   e x a m p l e ,   a   r e a d i n g   o f   1 0 0   /   8 0   i n d i c a t e s   a   b l o o d   p r e s s u r e 
 w i t h   a   s y s t o l i c   p r e s s u r e   o f   1 0 0   o v e r   a   d i a s t o l i c   p r e s s u r e   o f   8 0 .   F o r   t h i s   a p p l i c a t i o n , 
 s y s t o l i c   p r e s s u r e   c a n   r a n g e   f r o m   7 0   t o   1 9 0 ,   a n d   d i a s t o l i c   f r o m   4 0   t o   1 0 0 .   S y s t o l i c 
 p r e s s u r e   i s   a l w a y s   h i g h e r   t h a n   d i a s t o l i c   p r e s s u r e . 
 A   b l o o d   p r e s s u r e   r e a d i n g   c a n   b e   u s e d   t o   c a t e g o r i s e   t h e   b l o o d   p r e s s u r e   o f   t h e   p a t i e n t   a s 
 l o w   b l o o d   p r e s s u r e ,   i d e a l   b l o o d   p r e s s u r e ,   p r e - h i g h   b l o o d   p r e s s u r e ,   o r   h i g h   b l o o d 
 p r e s s u r e .   T h i s   f i g u r e   b e l o w   s h o w s   h o w   t h e   c a t e g o r y   c a n   b e   c a l c u l a t e d : 
 I n   t h e   a b o v e   f i g u r e   c o n s i d e r   t h e   l o w e r   l i m i t s   t o   b e   i n c l u s i v e   i n   t h e   c a t e g o r y   e . g .   a 
 s y s t o l i c   v a l u e   o f   1 4 0   o r   g r e a t e r   i n d i c a t e s   h i g h   b l o o d   p r e s s u r e . 
 S o u r c e   c o d e   f o r   a   s i m p l e   B l o o d   P r e s s u r e   C a t e g o r y   c a l c u l a t o r   i m p l e m e n t e d   i n   A S P . N e t 
 C o r e   R a z o r   p a g e s   c a n   b e   s e e n   i n   t h i s   p u b l i c   G i t   r e p o   h t t p s : / / g i t h u b . c o m / g c l y n c h / b p 
 T h e   c o d e   i s   i n c o m p l e t e   w i t h   r e s p e c t   t o   t h e   l o g i c   t o   c a l c u l a t e   t h e   b l o o d   p r e s s u r e 
 c a t e g o r y ,   c o m p l e t e   t h i s   c o d e .   A d d   t e l e m e t r y   t r a c k i n g   t o   t h e   a p p l i c a t i o n . 
 Y o u   a r e   r e q u i r e d   t o   d e s i g n   a n d   b u i l d   a   C I / C D   p i p e l i n e   f o r   t h e   a p p l i c a t i o n   u s i n g   t o o l s 
 a n d   f r a m e w o r k s   o f   y o u r   c h o i c e . 
 A s   r e g a r d s   t h e   C I   p a r t   o f   t h e   p i p e l i n e : 
 1 .   I n c l u d e   s o m e   u n i t   t e s t i n g   ( a i m   f o r   c o d e   c o v e r a g e   o f   a t   l e a s t   8 0 % ) 
 2 .   I n c l u d e   s o m e   B D D   t y p e   t e s t i n g 
 3 .   I n c l u d e   c o d e   a n a l y s i s 
 4 .   I n c l u d e   s e c u r i t y   f e a t u r e s   ( e . g .   c h e c k i n g   f o r   d e p e n d e n c i e s   w i t h   v u l n e r a b i l i t i e s 
 e t c . ) 
 I n   t h e   C D   p a r t   o f   t h e   p i p e l i n e : 
 1 .   I m p l e m e n t   a   r e l e a s e   m a n a g e m e n t   s t r a t e g y   ( e . g .   Q A ,   s t a g i n g   e t c . )   a n d 
 d e p l o y m e n t   s t r a t e g y   ( e . g .   b l u e / g r e e n   o r   c a n a r y   e t c . ) 
 2 .   I n c l u d e   s o m e   E 2 E   t e s t i n g 
 3 .   I n c l u d e s   s o m e   p e r f o r m a n c e   t e s t i n g 
 4 .   I n c l u d e s   s o m e   s e c u r i t y   f e a t u r e s   ( e . g .   p e n   t e s t i n g ) 
 5 .   I m p l e m e n t   c o n t i n u o u s   t e l e m e t r y   m o n i t o r i n g   i f   a p p r o p r i a t e 
 6 .   I m p l e m e n t   a u t h o r i s a t i o n   g a t e s   i f   a p p r o p r i a t e 
 F o r   t h e   w h o l e   C I / C D   p i p e l i n e   i n c l u d e   s o m e   s e c u r i t y   t a s k s .   A n y   b u g s   o r   c o d e   q u a l i t y 
 i s s u e s   s h o u l d   b e   a d d r e s s e d   a n d   t h e   c o d e   r e - f a c t o r e d . 
 A d d   o n e   n e w   f e a t u r e   ( w i t h   a p p r o p r i a t e   t e s t s )   i n   t h e   a p p l i c a t i o n .   T h e   n e w   f e a t u r e   s h o u l d 
 b e   m a x   3 0   l i n e s   o f   c o d e .   U s e   a   b r a n c h i n g   s t r a t e g y   l i k e   t h e   G i t   F e a t u r e   B r a n c h   w o r k f l o w . 
 D e l i v e r a b l e s : 
 1 .   V i d e o   d e m o   o f   p i p e l i n e   r u n n i n g   /   d e s c r i p t i o n   o f   p i p e l i n e   ( m a x   1 5   m i n u t e s ) 
 2 .   R e p o r t   d e s c r i b i n g   t h e : 
 a .   C I / C D   p i p e l i n e   ( i n c l u d i n g   t e s t s   e t c . ) ,   d e s i g n   p h i l o s o p h y 
 b .   T h e   n e w   f e a t u r e   ( e . g .   a   u s e r   s t o r y )  
 