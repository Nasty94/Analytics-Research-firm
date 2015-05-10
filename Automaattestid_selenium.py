# -*- coding: utf-8 -*-
from selenium import selenium
import unittest, time, re
import HTMLTestRunner
from selenium.common.exceptions import NoSuchElementException


class testsuite1(unittest.TestCase):
    def setUp(self):
        self.verificationErrors = []
        self.selenium = selenium("localhost", 4444, "*chrome", "http://lk-consulting.azurewebsites.net/")
        self.selenium.start()
    
    def test_comment(self):
        sel = self.selenium
        sel.open("/source/web/articles/article_sample.php")
        sel.type("id=comment_author", "Markus")
        sel.type("id=email", "markus.lippus@gmail.com")
        sel.type("id=comment", "testarvamus")
        sel.click("name=submit")
        sel.wait_for_page_to_load("30000")
        sel.click("link=Vaata kommentaare")
        self.failUnless(sel.is_text_present("testarvamus"))
    
    def test_register(self):
        sel = self.selenium
        sel.open("/source/web/articles/article_sample.php")
        sel.type("id=comment_author", "Markus")
        sel.type("id=email", "markus.lippus@gmail.com")
        sel.type("id=comment", "testarvamus")
        sel.click("name=submit")
        sel.wait_for_page_to_load("30000")
        sel.click("link=Vaata kommentaare")
        self.failUnless(sel.is_text_present("testarvamus"))

    def test_login(self):
        sel = self.selenium
        sel.open("/source/login.php")
        sel.type("id=username", "Markusli")
        sel.type("id=password", "Starwars1")
        sel.click("name=Submit")
        sel.wait_for_page_to_load("30000")
        self.failUnless(sel.is_text_present("olete edukalt sisse loginud!"))
        sel.click(u"link=Logi välja")
        sel.wait_for_page_to_load("30000")
        self.failUnless(sel.is_text_present(u"Olete edukalt välja loginud!"))
        sel.click("link=Logi sisse")
        sel.wait_for_page_to_load("30000")
        sel.click("css=img[alt=\"img/google_plus_sm.png\"]")
        sel.wait_for_page_to_load("30000")
        
        if logimine = sel.is_text_present("olete edukalt sisse loginud!"):
            return True
        else:
            sel.click("id=choose-account-0")
            sel.wait_for_page_to_load("30000")
            sel.click("id=submit_approve_access")
            sel.wait_for_page_to_load("30000")
            self.failUnless(sel.is_text_present("olete edukalt sisse loginud!"))

       
    def test_makeorder(self):
        sel = self.selenium
        sel.open("/source/login.php")
        sel.type("id=username", "Markusli")
        sel.type("id=password", "Starwars1")
        sel.click("name=Submit")
        sel.wait_for_page_to_load("30000")
        sel.click("link=Tellimuse tegemine")
        sel.wait_for_page_to_load("30000")
        sel.type("id=order", "testtellimus")
        sel.click("name=Submit")
        sel.wait_for_page_to_load("30000")
        self.failUnless(sel.is_text_present("Tegeleme teie tellimusega"))
        sel.click("link=Tellimuste ajalugu")
        sel.wait_for_page_to_load("30000")
        self.failUnless(sel.is_text_present("testtellimus"))
        sel.click("link=Muuda parooli")
        sel.wait_for_page_to_load("30000")
        sel.type("id=oldpwd_id", "Starwars1")
        sel.type("id=newpwd_id", "Starwars1")
        sel.click("name=Submit")
        sel.wait_for_page_to_load("30000")
        self.failUnless(sel.is_text_present("edukalt muudetud!"))
        sel.click("link=Avaleht")
        sel.wait_for_page_to_load("30000")



    def tearDown(self):
        self.selenium.stop()
        self.assertEqual([], self.verificationErrors)

if __name__ == "__main__":
    #unittest.main()
    HTMLTestRunner.main()
    

