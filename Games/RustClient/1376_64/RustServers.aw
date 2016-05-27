using System;
using System.IO;

namespace Allowerd.Core
{
    public sealed class RustServers
    {
        
        public static void Init() {
            File.AppendAllText("./Allowerd_Data/Output.log", "\nTEST");
        }
        
        private RustServers() {
           
        }
    }
}
