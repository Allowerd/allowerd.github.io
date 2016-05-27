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
    public sealed class Warden : Plugin
    {
        public override string Author {get;} = "TheRyuzaki";
        public override string Name {get;} = nameof(Warden);
        public override int Version {get;} = 1;
        
        public static void Init() {
            new Warden();
        }
        
        privat Warden() {
            Interface.AddPlugin(this);
            Interface.CallHoock("Interface.Log", "Inited - Warden");
        }
    }
}
