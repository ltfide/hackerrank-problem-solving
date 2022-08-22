function stripProp(obj, prop) {
   if (obj.hasOwnProperty(prop)) {
      delete obj[prop];
   }

   return obj;
}

const obj = {
   foo: 2,
   bar: 3,
   bax: 3,
};
// delete obj.foo;
// console.log(obj);
console.log(stripProp(obj, "foo"));
