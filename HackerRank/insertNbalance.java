/* Class node is defined as :
class Node 
int val;	//Value
int ht;		//getAlt
Node left;	//Left child
Node right;	//Right child
*/

static Node insert(Node root,int val) {
if(root == null) { //insercao em arvore vazia
   root = new Node();
   root.val = val;
   root.ht = setAlt(root);
   return root;
}
if(val <= root.val) {
   root.left = insert(root.left, val);
}
else if (val > root.val) {
   root.right = insert(root.right, val);
}
// balanceamento
int fator = getAlt(root.left) - getAlt(root.right);

if(fator > 1) {
   if(getAlt(root.left.left) >= getAlt(root.left.right)) {
       root = rotacionaD(root);
   }
   else {
       root.left = rotacionaE(root.left);
       root = rotacionaD(root);
   }
}
else if(fator < -1) {
   if(getAlt(root.right.right) >= getAlt(root.right.left)) {
       root = rotacionaE(root);
   }
   else {
       root.right = rotacionaD(root.right);
       root = rotacionaE(root);
   }
}
else {
   root.ht = setAlt(root);
}
return root;
}

private static Node rotacionaD(Node root) {
	Node aux = root.left;
	root.left = aux.right;
	aux.right = root;
	root.ht = setAlt(root);
	aux.ht = setAlt(aux);
	return aux;
}

private static Node rotacionaE(Node root) {
	Node aux = root.right;
	root.right = aux.left;
	aux.left = root;
	root.ht = setAlt(root);
	aux.ht = setAlt(aux);
	return aux;
}

private static int getAlt(Node root) {
if(root == null)
   return -1;
else 
   return root.ht;
}

private static int setAlt(Node root) {
if(root == null) {
   return -1;
} 
else {
   return 1 + Math.max(getAlt(root.left), getAlt(root.right));
}
}
