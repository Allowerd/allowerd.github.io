
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.IO;
using System.Net;
using System.Diagnostics;

using Allowerd.Core.Objects;

namespace Allowerd.Core
{
    public sealed class RustServers : Plugin
    {
        public override string Author {get;} = "TheRyuzaki";
        public override string Name {get;} = nameof(RustServers);
        public override int Version {get;} = 1;
        
        public static void Init() {
            new RustServers();
        }
        
        private RustServers() {
            Interface.AddPlugin(this);
            Interface.CallHoock("Interface.Log", "Inited - RustServers");
        }
    }
}
