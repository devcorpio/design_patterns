# design_patterns
This repository contains php code based in the book [Head First Design Patterns](https://www.amazon.es/Head-First-Design-Patterns-Freeman/dp/0596007124)

## Important

**I recommend to see each commit, For every commit I explain what I'm doing and you can see how was changed the code**

I'm working with the next design patterns:

1. Strategy pattern
2. Observer pattern
3. Decorator pattern
4. Factories
   - Simple factory (It is not considered officially a design pattern)
   - Factory method pattern
   - Abstract factory pattern
5. Singleton pattern(a few code, explains how deal with multithreading, and another things)
6. Command pattern
7. Adapter pattern
8. Facade pattern
9. Template method pattern
10.Iterator pattern
    - Due to the little quantity of code I wanna add a little explanation.
    
    That pattern helps to encapsulate the type of collection to the client: array, hashmap, linkedlist, etc), 
    We work with classes than implement a Iterator interface, 
    hence if we change our internals the client still work with an Iterator.
11. Composite pattern 