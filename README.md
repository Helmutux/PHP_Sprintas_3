# PHP_Sprintas_3
Minimalistinė turinio valdymo sistema (CMS).
Realizuota:
1. Galimybė puslapio lankytojui skaityti visus įrašus.
2. Galimybė registruotam vartotojui skaityti visus, įkelti naujus ir redaguoti esamus įrašus.
3. Galimybė administratoriui skaityti visus, įkelti naujus, redaguoti ir trinti esamus įrašus, bei įkelti į DB, redaguoti ir trinti kitus vartotojus, nustatant šių funkcionalą.

Paleidimas:
- susikurti db mano_tvs ir užkrauti į ją lenteles su įrašais iš mano_tvs.sql (importuoti);
- darbinį katalogą su failais persivadinti iš PHP_Sprintas_3 į Sprintas3 ir įsitikinti, kad katalogas yra pagrindiniame localhost medyje (localhost/Sprintas3)
- į darbinį katalogą suinstaliuoti composer'į;
- composer'io pagalba ten pat suinstaliuoti ORM Doctrine;
- terminale paleisti:
  vendor/bin/doctrine orm:schema-tool:update --force
Prisijungimui prisijungimo lange (localhost/Sprintas3/admin arba localhost/Sprintas3/user - abu veikia vienodai npriklausomai nuo prisijungiančiojo statuso) naudoti kombinacijas (vardas, slaptažodis):
Donatas, 1234 (admin.funkcionalas),
Mindaugas, 5555 (admin.funkcionalas),
arba
Jonas, 4444 (registr.vartot.funkcionalas)
