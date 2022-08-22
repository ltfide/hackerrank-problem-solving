def pickNumber(a) : 
   unik = sorted(set(a))
   n_max = max([a.count(bill) for bill in unik])

   for x,y in zip(unik[:-1], unik[1:]):
      if abs(x-y) not in (0, 1):
         continue
      n = a.count(x) + a.count(y)
      n_max = max(n_max, n)
   return n_max



print(pickNumber([1,2,3,4,2,3,4,5,5]))